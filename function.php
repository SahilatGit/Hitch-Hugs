<?php
 

 function make_avatar($character)
 {
     $path = 'avatar/'.time().'.png';

    $image = imagecreate(200, 200);
 
    $red = rand(0, 255);

     $green = rand(0, 255);

     $blue = rand(0, 255);

     imagecolorallocate($image, $red, $blue, $green);
   
     $textcolor =  imagecolorallocate($image, 255, 255, 255);
     imagettftext($image, 100, 0, 55, 150, $textcolor, 'font/arial.ttf', $character);

     header('Content-type: image/png');

     imagepng($image, $path);

     imagedestroy($image);

     return $path;
  }
//  function Get_user_avatar($user_id, $connect)
//  {
//     $query = "SELECT user_avatar FROM register_user
//                 where id = '".$user_id."'
//                 ";
   
//     $statement = $connect->prepare($query);
//     $statement->execute();

//     $result = $statement->fetchAll();

//     foreach($result as $row)
//     {
//        echo '<img src="'.$row["user_avatar"].'" width="75" 
//                 class="img-thumbnail img-circle" />';
//     }
//  }

function Get_user_profile_data($id, $conn)
{
   $query="SELECT * FROM register_user WHERE id = '".$id."'
    ";
   return $conn->query($query);
}

function Get_user_profile_data_html($id, $conn)
{
   $result = Get_user_profile_data($id, $conn);

   $output = '<div class="table-responsive" <table class="table">
               ';

   foreach($result as $row)
   {
      $output .='
      <tr>
         <th>Name  </th>
         <td>'.$row["user_name"].'</td>
      </tr>
      <tr>
         <th>Email  </th>
         <td>'.$row["user_email"].'</td>
      </tr>
      <tr>
         <th>Birth Date  </th>
         <td>'.$row["user_birthdate"].' </td>
      </tr>
      <tr>
         <th>Gender  </th>
         <td>'.$row["user_gender"].'</td>
      </tr>
      <tr>
         <th>City  </th>
         <td>'.$row["user_city"].'</td>
      </tr>
      <tr>
         <th>State  </th>
         <td>'.$row["user_state"].'</td>
      </tr>
      <tr>
         <th>Country  </th>
         <td>'.$row["user_country"].'</td>
      </tr>
      <tr>
         <th>Habits  </th>
         <td>'.$row["user_habits"].'</td>
      </tr>
      <tr>
         <th>Star Sign  </th>
         <td>'.$row["user_sign"].'  </td>
      </tr>
      <tr>
         <th>Interests:  </th>
         <td>'.$row["user_interests"].'</td>
      </tr>
      ';
   }
   $output .= '</table> </div>';
   return $output;
}







?>