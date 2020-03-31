<style type="text/css">
html{
    scroll-behavior:smooth;
}
/* .row{
    margin-right:0!important;
    margin-left:0!important;
}if you know media query then chnge use this code!!! */
.navbar{
    position:sticky!important;
    top:0;
    /* position:relative; */
     z-index:50
}
.collapse {
    background-color:transparent!important;
    z-index:1999!important;
}
*{
   margin:0;
   padding:0;
   box-sizing:border-box;
   font-family: 'Muli', sans-serif;
}
.nav_style{
    background-color: white!important;
}
.nav_style a{
    color: black;
}
/* ////////////////// */
.main_header{
    height: 450px;
    width: 100%;
}
.right h1{
    font-size:3rem;
}
.left img{
    animation:heartbeat 4s linear infinite;
}
@keyframes heartbeat{
 0%{ 
     transform:scale(.75);
      }
 20%{ 
     transform:scale(1);
     }
 40%{
      transform:scale(.75);
      }
 60%{ 
     transform:scale(1);
     }
 80%{
      transform:scale(.90);
      }
 100%{
      transform:scale(.75);
      }

}
.sub_section{
    background-color:#fbfafd;
}



.footer_style p{
    margin-bottom :0px!important;
}

.hero{
    
  margin-left: auto;
  margin-right: auto;
  width: 50%
    
} 
.hero a{
     padding: 4px;
         color: white;
}
.hero a img{
    
   max-width:40px;
      border-radius:19px;
}
.hero a img:hover{
  background-color:	#DAE0E2;
}
  

</style>