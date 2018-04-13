<?php
    include('CMScommon.php');
    //these two functions make sure there's no need to repeat the same HTML code on all the pages
    outputCMSHeader();
    outputMain();
?>
<h1>Welcome to the MoniShop Content Management System</h1>
<p>
  Using our CMS the staff is able to add/remove/edit products and overview everything related with our stock and orders.
</p>
<p>
  Remember to always double-check any change to the stock before going through with the change.
</p>

<p3>Staff number</p3><br />
<input class="inputBox" id="staffEmail" type="text" name="StaffEmail" required><br />
<p3>Password</p3><br />
<input class="inputBox" id="staffPwd" type="password" name="staffPwd" required><br />
<button onclick="checkLoginStaff()">Login</button><br />
<button onclick="logout()">Logout</button>
<script>
function logout() {

}
function checkLoginStaff(){
    var request = new XMLHttpRequest();
    request.onload = function(){
        if(request.status === 200){
                var responseData = request.responseText;
                alert(responseData);
                window.location.replace("index.php");
            }
            else
                alert("Error communicating with server: " + request.status);
            };
            request.open("POST", "loginStaff.php");
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            var staffEmail = document.getElementById("staffEmail").value;
            var staffPwd = document.getElementById("staffPwd").value;

            request.send("staffEmail=" + staffEmail + "&staffPwd=" + staffPwd);
        }
        function logout() {
            var request = new XMLHttpRequest;
            request.onload = function() {
                if(request.status === 200) {
                    alert(request.responseText);
                    window.location.replace("index.php");
                }else {
                    alert("Error logging out");
                }
            }
            request.open("GET", "staffLogout.php");
            request.send();
        }
</script>
<?php
  //PHP outputting the end HTML tags
    outputEndCMS();
