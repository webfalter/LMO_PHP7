<?php
/** Liga Manager Online 4
  *
  * http://lmo.sourceforge.net/
  *
  * This program is free software; you can redistribute it and/or
  * modify it under the terms of the GNU General Public License as
  * published by the Free Software Foundation; either version 2 of
  * the License, or (at your option) any later version.
  *
  * This program is distributed in the hope that it will be useful,
  * but WITHOUT ANY WARRANTY; without even the implied warranty of
  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
  * General Public License for more details.
  *
  * REMOVING OR CHANGING THE COPYRIGHT NOTICES IS NOT ALLOWED!
  *
  */

?>
<script type="text/javascript">
<!---
function immerallechange(){
  lmotest=false;
  for(i=0;i<document.getElementsByName("xtipperligen[]").length;i++){
    if(document.getElementsByName("ximmeralle")[0].checked==0){
      document.getElementsByName("xtipperligen[]")[i].disabled=false;
      }
    else{
      document.getElementsByName("xtipperligen[]")[i].disabled=true;
      }
    }
  }
function moduschange(){
  lmotest=false;
  if(document.getElementsByName("xtippmodus")[0].value==1){
    document.getElementsByName("xrergebnis")[0].disabled=false;
    document.getElementsByName("xrtendenzdiff")[0].disabled=false;
    document.getElementsByName("xrtendenz")[0].disabled=false;
    document.getElementsByName("xrtor")[0].disabled=false;
    document.getElementsByName("xrtendenztor")[0].disabled=false;
    document.getElementsByName("xrtendenzremis")[0].disabled=false;
    document.getElementsByName("xshowdurchschntipp")[0].disabled=false;
    document.getElementsByName("xpfeiltipp")[0].disabled=false;
    }
  else{
    document.getElementsByName("xrergebnis")[0].disabled=true;
    document.getElementsByName("xrtendenzdiff")[0].disabled=true;
    document.getElementsByName("xrtendenz")[0].disabled=true;
    document.getElementsByName("xrtor")[0].disabled=true;
    document.getElementsByName("xrtendenztor")[0].disabled=true;
    document.getElementsByName("xrtendenzremis")[0].disabled=true;
    document.getElementsByName("xshowdurchschntipp")[0].disabled=true;
    document.getElementsByName("xpfeiltipp")[0].disabled=true;
    }
  }

function regelnchange(){
  lmotest=false;
  if(document.getElementsByName("xregeln")[0].checked==1){
    document.getElementsByName("xregelnlink")[0].disabled=false;
    }
  else{
    document.getElementsByName("xregelnlink")[0].disabled=true;
    }
  }

function jokerchange(){
lmotest=false;
  if(document.getElementsByName("xjokertipp")[0].checked==1){
    document.getElementsByName("xjokertippmulti")[0].disabled=false;
    }
  else{
    document.getElementsByName("xjokertippmulti")[0].disabled=true;
    }
  }

function viewerchange(){
lmotest=false;
  if(document.getElementsByName("xviewertipp")[0].checked==1){
    document.getElementsByName("xviewertage")[0].disabled=false;
  } else {
    document.getElementsByName("xviewertage")[0].disabled=true;
  }
  if(document.getElementsByName("xsttipp")[0].checked==0 && document.getElementsByName("xviewertipp")[0].checked==0){
      alert('<?php echo $text['tipp'][301]?>');
  }
}
// --->
</script>