<?php //Developed by www.freestudentprojects.com
include("connection.php");
?>
<?php //Developed by www.freestudentprojects.com
include("header.php");
?>
    <div id="templatemo_main">
    
        <?php //Developed by www.freestudentprojects.com
		include("sidebar.php");
		?> <!-- end of templatemo_sidebar -->
        
        <div id="templatemo_content">
        
            <h1>Latest News</h1>
            
            <p>
<table border="1">
<tr>
<th>Full name</th>
<th>Designation</th>
<th>Username</th>
<th>Contact Number</th>
<th>Mobile Number</th>
<th>Status</th>
</tr>
<?php //Developed by www.freestudentprojects.com
include("connection.php");

$sqlsel = "SELECT employees.*, designation.designation FROM employees INNER JOIN designation ON employees.did = designation.did where employees.did=1 OR employees.did=2";
$res = mysqli_query($obj,$sqlsel);

while($rs = mysqli_fetch_array($res))
{
echo "<tr>
<td>$rs[fname] $rs[lname] </td>
<td>$rs[designation]</td>
<td>$rs[username]</td>
<td>$rs[contactnumber]</td>
<td>$rs[mobilenumber]</td>
<td>$rs[status]</td>
</tr>";
}
?>
</table>
</p>
          </div>

        </div>
        
    </div>
    
    <div class="cleaner"></div>

</div> <!-- end of wrapper -->

<?php //Developed by www.freestudentprojects.com include("footer.php");?>