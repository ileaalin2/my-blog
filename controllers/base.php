<?php
// test
class Base {
    function render($view, $data = '') {
        $content = file_get_contents($view);
        if (is_array($data)) {
        	foreach($data as $key => $value) {
        		$content = str_replace('{{'.$key.'}}', $value, $content);		
        	}
        }
        echo $content;	
    }
    
    function renderSimple($view, $data = '') {
        $content = file_get_contents($view);
        if (is_array($data)) {
        	foreach($data as $key => $value) {
        		$content = str_replace('{{'.$key.'}}', $value, $content);		
        	}
        }
        return $content;	
    }
    function renderIf($view, $data = ''){
        $content = file_get_contents($view);
        
        $pattern = "/{{\s*if\s*([\w\d_]+)}}\s*{{\s*([\w\d_]+)\s*}}\s*{{\s*else\s*}}\s*{{\s*([\w\d_]+)\s*}}\s*{{\s*endif\s*}}/";
        preg_match_all($pattern, $content, $matches);
        
        foreach($matches[0] as $key => $value) {
            $matchCondition = $matches[1][$key];
            $matchIf = $matches[2][$key];
            $matchElse = $matches[3][$key]; 
            
            if ($data[$matchCondition]) {
                $replaced = $data[$matchIf];
            }
            else {
                $replaced = $data[$matchElse];
            }
             
            $content = str_replace($value, $replaced, $content);
        }

        echo $content;
        
    }
    
    // not fully functional yet
    function renderForEach($view, $data = '') {
        $content = file_get_contents($view);
        // foreach
        preg_match_all ('/{{\s*foreach ([_a-zA-Z0-9]+)\s*}}\s*(.*?)\s*{{\s*endforeach\s*}}/s', $content, $results);
        //exit;
        
        if(count($results[0]) > 0) {
            
            $i = 0;
            foreach($results[0] as $occurence) {
            	
            	$rendered = "";
            	
            	$pattern = $results[0][$i];
            	$arrayName = $results[1][$i];
            	$block = $results[2][$i]; 
            
             	foreach ($data[$arrayName] as $elem) {
             	    
                 // var_dump($elem);
                  $rendered .= $this->renderSimple($view, $elem);
                  
                  var_dump($rendered);
              }
              
              $content = str_replace($pattern, $rendered, $content);
              
              $i++;
            }
        }
        
        echo $content;    
    }
}
?>
