<!-- This is the previous version of footer.php worked with foreach. Now it's not functional. -->
<!-- test  -->
<?php
    $team = array(
        'ilear'    => 'My site',
        'ciosanp'  => 'Ciosan Paul',
        'mocans'   => 'Mocan Daniel',
        'hacicua'  => 'Hacicu Alex',
        'lazurcaa' => 'Lazurca Andrei',
        'fatig'    => 'Fati Romeo',
        'echertr'  => 'Echert Robert',
        'hadarigd' => 'Hadarig Dan',
        'hanganut' => 'Hanganu Dora',
        'prodans'  => 'Prodan Sergiu',
        'girdanr'  => 'Girdan Roxana',
        'tanasea'  => 'Tanase Andrei',
        'simonv'   => 'Simon Daniel',
        'vomveab'  => 'Vomvea Bogdan');
?>

            <div class="footer">
                <div class="col-12">
                    <p>My Team from Informal School of IT:</p>
                    <ul>
                        <?php foreach ($team as $id => $fullname) { ?>
                            <li>
                                <a href="http://188.166.119.187/workspace/<?php echo $id; ?>/curs3/part2/tema/index.php" <?php if($id !== 'ilear') { ?> target="_blank" <?php }; ?> > <?php echo $fullname; ?> </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <p>&#169; 2015, Alin Ilea</p>
            	</div>
            </div>
        </div>
    </body>
</html>
