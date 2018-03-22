<?php
 //this function outputs the HTML header such as the doctype, header, title,and all the starting html lines that would be repeated on all of the pages
function outputHeader($title) {
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<!-- ****** faviconit.com favicons ****** -->
	   <link rel="shortcut icon" href="/favicon.ico">
	   <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
	   <link rel="icon" type="image/png" sizes="196x196" href="images/favicon-192.png">
	   <link rel="icon" type="image/png" sizes="160x160" href="images/favicon-160.png">
	   <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96.png">
	   <link rel="icon" type="image/png" sizes="64x64" href="images/favicon-64.png">
	   <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32.png">
	   <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16.png">
	   <meta name="msapplication-TileColor" content="#FFFFFF">
	   <meta name="msapplication-TileImage" content="images/favicon-144.png">
	   <meta name="msapplication-config" content="/browserconfig.xml">
	  <!-- ****** faviconit.com favicons ****** -->';
    echo '<meta charset="UTF-8">';
    echo '<title>' . $title . '</title>';
    echo '<link href="https://fonts.googleapis.com/css?family=Prosto+One" rel="stylesheet">';
    echo '<link href="https://www.w3schools.com/w3css/4/w3.css"  rel="stylesheet">';
    echo '<link href="apearance.css" type="text/css" rel="stylesheet">';
    echo '<script scr="account.js" type="text/javascript"></script>';
    echo '</head>';
    echo '<body>';
}
function outputNavBar() {
  //this function creates a list using an array containing all the information, (name, href, images) and loops through all of them to create the navigation bar
    echo '<ul>';

    $pageName = array("MoniShop");
    $pageRef = array("index.php");
    $pageLogo = array("images\WebsiteLogo.png");
    for ($i = 0; $i < count($pageName); $i++) {
        echo '<li><a class="' . $pageName[$i] . '" href="' . $pageRef[$i] . '">';
        echo '<img style="width: auto; height: auto;" src="' . $pageLogo[$i] . '" alt="' . $pageName[$i] . '">';
        echo '</a></li>';
    }
}
function outputSearchBar() {
  //creates the search bar on the top of most of the shop pages
  echo '<form>';
  echo '<input class="searchBar" type="text" name="searchBar" placeholder="Search for product"/>';
  echo '<input class="searchBarSub" type="Submit" value="Search" src="images\glass.png"/>';
  echo '</form>';
}

function itemDivs() {
  //loops throught the number of products (8 is used in this case just to simplify the creation of multiple boxes) and generate a box containing a picture and info about the products
  for ($i = 0; $i < 8; $i++) {
    echo '<span class="mainItemDiv2">';
    echo '<div>';
    echo '<img src="images\x.png" />';
    echo '</div>';
    echo '<div class="itemInfo1">';
    echo '<p5>1080p HD</p5><br />';
    echo '</div>';
    echo '<div class="itemInfo2">';
    echo '<p5>27" Screen</p5><br />';
    echo '</div>';
    echo '<div>';
    echo '<p6>£399.99</p6><button>Add to cart</button>';
    echo '</div>';
    echo '</span>';
  }
}

function ItemFilters() {
  //function used to generate the filters section on all of the pages, at the moment there is no difference between athe filters used in different pages because there are still no products to choose from
  echo '<span class="mainItemFilters">
    <div class="CategoryFilter">
      <h5>Category</h5>
      <div>
        <input type="checkbox" />
        <label>Curved</label>
      </div>
      <div>
        <input type="checkbox" />
        <label>4K</label>
      </div>
      <div>
        <input type="checkbox" />
        <label>Smart</label>
      </div>
    </div>
    <div class="SizeFilter">
      <h5>Screen Size</h5>
      <select>
        <option value="any" selected>---</option>
        <option value="25-35">25"-35"</option>
        <option value="35-45">35"-45"</option>
        <option value="45-55">45"-55"</option>
        <option value="+55">+55"</option>
      </select>
    </div>
    <div class="CategoryFilter">
      <h5>Screen Resolution</h5>
      <div>
        <input type="checkbox" />
        <label>3440 x 1440</label>
      </div>
      <div>
        <input type="checkbox" />
        <label>2560 x 1440</label>
      </div>
      <div>
        <input type="checkbox" />
        <label>1920 x 1080</label>
      </div>
      <div>
        <input type="checkbox" />
        <label>1600 x 900</label>
      </div>
    </div>
  </span>';
}

function outputEndHTML() {
    echo '</body>';
    echo '</html>';
}
