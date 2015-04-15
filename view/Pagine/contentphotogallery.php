<div id=content>
													<div class="gallery">
							    <p align="center">
							    <a href="javascript:up()">UP</a> |
							    <a href="javascript:down()">DOWN</a>
							    <br><br>
							    <img src="gallery/Albo1.jpg" name="immagine">
							</p>

							 
								</div>


							<script>
							var photo = new Array();

							photo[0] = "gallery/Albo1.jpg"
							photo[1] = "gallery/Albo2.jpg"
							photo[2] = "gallery/Albo3.jpg"
							photo[3] = "gallery/Albo4.jpg"
							photo[4] = "gallery/Albo5.jpg"

							var i = 0;

							function up()
							{
							    if (i == 0)
							    {
								i = photo.length - 1;
							    }
							    else
							    {
								i--;
							    }
							    document.immagine.src = photo[i];
							}

							function down()
							{
							    if (i < photo.length - 1)
							    {
								i++;
							    }
							    else
							    {
								i=0;
							    }
							    document.immagine.src = photo[i];
							}
							</script>
					</div>				
