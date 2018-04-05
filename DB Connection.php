<!DOCTYPE html>
<html>
<head>
<title>DB Connection</title>
<?php
session_start();
$_SESSION['course'] = "DB Connection";
?>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 15%;
    height: none;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 80%;
    border-left: none;
    height: none;
}
</style>
</head>
<body>
<div style="width: 100%; max-width: 1920px;  min-width: 480px; height: auto; overflow: hidden;">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'c1')" id="defaultOpen">Database Connectivity</button>
  
</div>

<div id="c1" class="tabcontent">
<h1> Connecting to the Database Engine</h1>

<p>When you install the  SQL Server Database Engine, the tools that are installed depend upon the edition and your setup choices. This lesson reviews the principal tools, and shows you how to connect and perform a basic function (authorizing more users).  </p>

<h2 id="a-nametoolstools-for-getting-starteda"><a name="tools">Tools For Getting Started</a></h2>
<p> -The  SQL Server Database Engine ships with a variety of tools. This topic describes the first tools you will need, and helps you select the right tool for the job. All tools can be accessed from the <strong>Start</strong> menu. Some tools, such as  SQL Server Management Studio, are not installed by default. You must select the tools as part of the client components during setup. For a complete description of the tools described below, search for them in  SQL Server Books Online.  SQL Server Express contains only a subset of the tools.  </p>
<h3 id="basic-tools">Basic Tools</h3>
<ul>
<li><p> SQL Server Management Studio (SSMS) is the principal tool for administering the  Database Engine and writing  Transact-SQL code. It is hosted in the  Visual Studio shell. SSMS is available as a free download from Microsoft Download Center</a>. The latest version can be used with older versions of the  Database Engine.  </p>
</li>
<li><p> SQL Server Configuration Manager installs with both  SQL Server and the client tools. It lets you enable server protocols, configure protocol options such as TCP ports, configure server services to start automatically, and configure client computers to connect in your preferred manner. This tool configures the more advanced connectivity elements but does not enable features.  </p>
</li>
</ul>
<h3 id="sample-database">Sample Database</h3>
<p>The sample databases and samples are not included with  SQL Server. Most of the examples that are described in  SQL Server Books Online use the   <strong>AdventureWorks2012</strong> sample database.  </p>
<h5 id="to-start-sql-server-management-studio">To start SQL Server Management Studio</h5>
<ul>
<li>On current versions of Windows, on the <strong>Start</strong> page, type SSMS, and then click <strong>Microsoft SQL Server Management Studio</strong>.  </li>
<li>When using older versions of Windows, on the <strong>Start</strong> menu, point to <strong>All Programs</strong>, point to   <strong>Microsoft SQL Server 2017</strong>, and then click <strong>SQL Server Management Studio</strong>.  </li>
</ul>
<h5 id="to-start-sql-server-configuration-manager">To start SQL Server Configuration Manager</h5>
<ul>
<li>On current versions of Windows, on the <strong>Start</strong> page, type <strong>Configuration Manager</strong>, and then click <strong>SQL Server <em>version</em> Configuration Manager</strong>.<br>--   When using older versions of Windows, on the <strong>Start</strong> menu, point to <strong>All Programs</strong>, point to   <strong>Microsoft SQL Server 2017</strong>, point to <strong>Configuration Tools</strong>, and then click <strong>SQL Server Configuration Manager</strong>.  <ul>
<li>## <a name="connect"></a>Connecting with Management Studio<br>-It is easy to connect to the  Database Engine from tools that are running on the same computer if you know the name of the instance, and if you are connecting as a member of the local Administrators group on the computer. The following procedures must be performed on the same computer that hosts  SQL Server.  </li>
</ul>
</li>
</ul>

<h5 id="to-determine-the-name-of-the-instance-of-the-database-engine">To determine the name of the instance of the Database Engine</h5>
<ol>
<li>Log into Windows as a member of the Administrators group, and open  Management Studio.  </li>
<li>In the <strong>Connect to Server</strong> dialog box, click <strong>Cancel</strong>.  </li>
<li>If Registered Servers is not displayed, on the <strong>View</strong> menu, click <strong>Registered Servers</strong>.</li>
<li>With <strong>Database Engine</strong> selected on the Registered Servers toolbar, expand <strong>Database Engine</strong>, right-click <strong>Local Server Groups</strong>, point to <strong>Tasks</strong>, and then click <strong>Register Local Servers</strong>. All instances of the  Database Engine installed on the computer are displayed. The default instance is unnamed and is shown as the computer name. A named instance displays as the computer name followed by a backward slash (\) and then the name of the instance. For  SQL Server Express, the instance is named <em>&lt;computer_name&gt;</em>\sqlexpress unless the name was changed during setup.  </li>
</ol>
<h5 id="to-verify-that-the-database-engine-is-running">To verify that the Database Engine is running</h5>
<ol>
<li><p>In Registered Servers, if the name of your instance of  SQL Server has a green dot with a white arrow next to the name, the  Database Engine is running and no further action is necessary.  </p>
</li>
<li><p>If the name of your instance of  SQL Server has a red dot with a white square next to the name, the  Database Engine is stopped. Right-click the name of the  Database Engine, click <strong>Service Control</strong>, and then click <strong>Start</strong>. After a confirmation dialog box, the  Database Engine should start and the circle should turn green with a white arrow.  </p>
</li>
</ol>
<h5 id="to-connect-to-the-database-engine">To connect to the Database Engine</h5>
<p>At least one administrator account was selected when  SQL Server was being installed. Perform the following step while logged into Windows as an administrator.</p>
<ol>
<li>In  Management Studio, on the <strong>File</strong> menu, click <strong>Connect Object Explorer</strong>. </li>
<li><p>The <strong>Connect to Server</strong> dialog box opens. The <strong>Server type</strong> box displays the type of component that was last used.  </p>
</li>
<li><p>Select <strong>Database Engine</strong>.</p>
</li>
</ol>
<ol>
<li>In the <strong>Server name</strong> box, type the name of the instance of the  Database Engine. For the default instance of SQL Server, the server name is the computer name. For a named instance of SQL Server, the server name is the <em>&lt;computer_name&gt;</em><strong>\</strong><em>&lt;instance_name&gt;,</em> such as <strong>ACCTG_SRVR\SQLEXPRESS</strong>. The following screenshot shows connecting to the default (un-named) instance of  SQL Server on a computer named &#39;PracticeComputer&#39;. The user logged into Windows is Mary from the Contoso domain. When using Windows Authentication you cannot change the user name. </li>
</ol>
<ol>
<li>Click <strong>Connect</strong>.</li>
</ol>

<h2 id="additional">Authorizing Additional Connections</h2>
<p>Now that you have connected to  SQL Server as an administrator, one of your first tasks is to authorize other users to connect. You do this by creating a login and authorizing that login to access a database as a user. Logins can be either Windows Authentication logins, which use credentials from Windows, or SQL Server Authentication logins, which store the authentication information in  SQL Server and are independent of your Windows credentials. Use Windows Authentication whenever possible.</p>
<div class="TIP"><p>Tip</p><p>Most organizations have domain users and will use Windows Authentication. You can experiment on your own, by creating additional local users on your computer. Local users will be authenticated by your computer, so the domain is the computer name. For example if your compute is named <code>MyComputer</code> and you create a user named <code>Test</code>, then the Windows description of the user is <code>Mycomputer\Test</code>.  </p>
</div>
<h5 id="create-a-windows-authentication-login">Create a Windows Authentication login</h5>
<ol>
<li><p>In the previous task, you connected to the  Database Engine using  Management Studio. In Object Explorer, expand your server instance, expand <strong>Security</strong>, right-click <strong>Logins</strong>, and then click <strong>New Login</strong>. The <strong>Login - New</strong> dialog box appears.  </p>
</li>
<li><p>On the <strong>General</strong> page, in the <strong>Login name</strong> box, type a Windows login in the format: <code>&lt;domain&gt;\\&lt;login&gt;</code></p>
</li>
</ol>
<ol>
<li>In the <strong>Default database</strong> box, select   <strong>AdventureWorks2012</strong> if available. Otherwise select <strong>master</strong>.  </li>
<li>On the <strong>Server Roles</strong> page, if the new login is to be an administrator, click <strong>sysadmin</strong>, otherwise leave this blank.  </li>
<li>On the <strong>User Mapping</strong> page, select <strong>Map</strong> for the   <strong>AdventureWorks2012</strong> database if it is available. Otherwise select <strong>master</strong>. Note that the <strong>User</strong> box is populated with the login. When closed, the dialog box will create this user in the database.  </li>
<li>In the <strong>Default Schema</strong> box, type <strong>dbo</strong> to map the login to the database owner schema.   </li>
<li>Accept the default settings for the <strong>Securables</strong> and <strong>Status</strong> boxes and click <strong>OK</strong> to create the login.  </li>
</ol>
<input type="button" onclick="document.location.href='certificate.php'" class="button" value="View Certificate"/>
</div>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
