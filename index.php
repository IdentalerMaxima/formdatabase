   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Forms</title>
   </head>
   <body>
      <h1>HTML FORM</h1>
      <div class="container">
         <form action="connect.php" method="post">
         <div>
            <label>Name</label>
            <input type="name" name="name" placeholder="Enter ur name" autocomplete="off">
         </div>
         <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter ur email" autocomplete="on">
         </div>
         <div class="genderContainer">
            <label>Gender</label>
            <input type="radio" name="gender" class="gender1" value="m" autocomplete="off">Male
            <input type="radio" name="gender" class="gender1" value="f" autocomplete="off">Female
            <input type="radio" name="gender" class="gender1" value="o" autocomplete="off">Other
         </div>
         <div>
            <label>Phone</label>
            <input type="text" name="phone" placeholder="Enter ur phone number" autocomplete="off">
         </div>
         <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter ur phone password" autocomplete="off">
         </div>
         <div class="btn">
            <button type="submit">Submit data</button>
         </div>
         </form>

      </div>
    
   </body>
   </html>