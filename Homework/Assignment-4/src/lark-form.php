<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Lark Submission Form</title>
      <link rel="stylesheet" href="css/styles.css" />
      <script type="text/javascript" src="js/lark-form.js"></script>
   </head>

   <body>
      <form action="validation.php" method="POST" id="mainForm" enctype="multipart/form-data">
         <fieldset>
            <legend>Unix LARK Submission description</legend>
            <table>
               <tr>
                  <td colspan="2">
                     <p>
                        <label>Title</label><br/>
                        <input type="text" name="title" id="title" class="required hilightable" />
                     </p>
                     
                     <p>
                        <label>Description</label><br/>
                        <input type="text" name="description" id="description" class="required hilightable">
                     </p>            
                  </td>
               </tr>

               <tr>
                  <td>

                     <p> 
                        <label>Genre</label><br/>
                        <select name="genre" class="hilightable">
                           <option>Choose genre</option> 
                           <option>Puzzle</option>
                           <option>Dungeon Crawler</option>
                           <option>RPG</option>
                           <option>Fighting</option>
                        </select>
                     </p>

                     <p> 
                        <label>Subject</label><br/>
                        <select name="subject" class="hilightable">
                           <option>Choose game subject</option>
                           <option>Survival</option>
                           <option>Best Score</option>
                           <option>Explore</option>
                        </select>
                     </p>
                     
                     <p>	
                        <label>Medium</label><br/>               
                        <input type="text" name="medium" class="hilightable"/>
                        <?php if(isset($medium_error)) { ?>
                           <?php echo '<i class="validation_error"> * invalid medium </i>' ?>
                        <?php } ?> 
                     </p>

                     <p>
                        <label>Year Published</label><br/>
                        <input type="text" name="year" class="hilightable required"/>
                        <?php if(isset($year_error)) { ?>
                           <?php echo '<i class="validation_error"> * invalid year </i>' ?>
                        <?php } ?>
                     </p>  

                     <p>	
                        <label>Student Email</label><br/>
                        <input type="text" name="email" class="hilightable required"/>
                        <?php if(isset($email_error)) { ?>
                           <?php echo '<i class="validation_error"> * invalid email </i>' ?>
                        <?php } ?>
                     </p>   
                     
                     <div class="box">
                        <label>Upload file </label><br/>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <?php if(isset($file_error)) { ?>
                           <p class="validation_error"><?php echo $file_error?></p>
                        <?php } ?>
                     </div>

                  </td>
                   
                  <td>
                     <div class="box">
                        <label>Type </label><br/>
                        <input type="radio" name="type" value="1" checked>Linux Bash<br/>
                        <input type="radio" name="type" value="2">WebGL<br/>
                     </div>

                     <div class="box">
                        <label>Creative Commons Specification </label><br/>
                        <input type="checkbox" name="cc" >Attribution <br/>
                        <input type="checkbox" name="cc" >Noncommercial <br/>    
                        <input type="checkbox" name="cc" >No Derivative Works <br/>  
                        <input type="checkbox" name="cc" >Share Alike<br/>
                        <input type="checkbox" name="cc" >Keep Private
                     </div>               
                  </td>

               </tr>
      
               <tr>
                  <td colspan="2">
                     <div class="rectangle centered"> 
                        <input type="submit" class="btn" name="submit"> 
                        <input type="reset" value="Clear Form" class="btn">      
                     </div>
                  </td>
               </tr>
            </table>
         </fieldset>
      </form>
   </body>
</html>
