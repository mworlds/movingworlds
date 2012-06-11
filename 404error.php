<?php  $request=$_SERVER['REQUEST_URI'];  

$arrMoved=array(
  "/index.php"=>"/"
  , "/scope.php"=>"/scope"
  , "/volumes/11/Postcolonial-Europe.php"=>"/volumes/11/postcolonial-europe/"
  , "/volumes/11/Locating-The-Caribbean.php"=>"/volumes/11/locating-the-caribbean/"
  , "/volumes/10/CriticalPerspectives.php"=>"/volumes/10/critical-perspectives/"
  , "/volumes/10/TenYearsForward.php"=>"/volumes/10/ten-years-forward-creative-supplement/"
  , "/volumes/10/ReviewingSingapore.php"=>"/volumes/10/reviewing-singapore/"
  , "/previous_issues.php"=>"/archive"
  , "/submissions.php"=>"/submissions"
  , "/subscriptions.php"=>"/subscriptions"
  , "/editorial_team.php"=>"/editorial-team"
  , "/credits.php"=>"/credits"
  , "/contact.php"=>"/contact"
  , "/links.php"=>"/links"
  , "/purchase_online.php"=>"/purchase-online"
  , "/volumes/9/RegionWritingHome.php"=>"/volumes/9/region-writing-home/"
  , "/volumes/9/Chotro.php"=>"/volumes/9/chotro/"
  , "/volumes/8/new_new_zealand.php"=>"/volumes/8/new-new-zealand/"
  , "/volumes/8/Pillars_of_Light.php"=>"/volumes/8/pillars-of-light/"
  , "/volumes/7/Freedom_and_Culture.php"=>"/volumes/7/freedom-and-culture/"
  , "/volumes/7/Familial_And_Other_Conversations.php"=>"/volumes/7/familial-and-other-conversations/"
  , "/volumes/6/Food_Culture_And_Community.php"=>"/volumes/6/food-culture-and-community/"
  , "/volumes/6/Telling_Stories_Telling_Lives.php"=>"/volumes/6/telling-stories-telling-lives/"
  , "/volumes/5/Performing_Arts_and_South_Asian_Literature.php"=>"/volumes/5/performing-arts-and-south-asian-literature/"
  , "/volumes/5/Postcolonial_Cities_Africa.php"=>"/volumes/5/postcolonial-cities-africa/"
  , "/volumes/4/Alien-Nation.php"=>"/volumes/4/alien-nation/"
  , "/volumes/4/Bilangue.php"=>"/volumes/4/bilangue/"
  , "/volumes/3/Masquerade_Caribbean_Issue.php"=>"/volumes/3/masquerade-caribbean-issue/"
  , "/volumes/3/Postcolonian_Ireland.php"=>"/volumes/3/postcolonial-ireland/"
  , "/volumes/2/Reflections.php"=>"/volumes/2/reflections/"
  , "/volumes/2/Routes.php"=>"/volumes/2/routes/"
  , "/volumes/1/Art_and_The_Artist.php"=>"/volumes/1/art-and-the-artist/"
  , "/downloads/notes_for_contributors_moving_worlds.pdf"=>"/assets/media/pdf/notes_for_contributors_moving_worlds.pdf"
);

if(array_key_exists($request,$arrMoved)) 
{ 
  $newplace="http://".$_SERVER['HTTP_HOST'].$arrMoved[$request]; 
  header("HTTP/1.0 301 Moved Permanently"); 
  header("Location: $newplace"); 
  header("Connection: close"); 
  exit();
} 
else 
{ 
  header("HTTP/1.0 404 Not Found"); 
  header("Location: /404"); 
}  
?>