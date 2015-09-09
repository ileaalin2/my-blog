<!-- isn't fully functional yet -->
            <div class="footer">
                <div class="col-12">
                    <p>My Team from Informal School of IT:</p>
                    <ul>
                    
                        {{ foreach team }}
                            <li><a href="http://188.166.119.187/workspace/{{username}}/curs1/tema/index.html" target="_blank">{{name}}</a></li>
                        {{ endforeach }}
                    </ul>
                    <p>&#169; 2015, Alin Ilea</p>
            	</div>
            </div>
        </div>
	</body>
</html>
