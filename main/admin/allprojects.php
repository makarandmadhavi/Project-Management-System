<h1 class="text-center mt-4"><b>All Projects</b></h1>
<div class="container" style="margin-bottom: 40px;">
    <br>

<?php 
$status = $_GET['project_status'];
?>

<div class="card">
    <div class="card-header">
        <h5 id="table_head">Projects List</h5>
    </div>

    <div class="card-body">

        <table class="table" id="projects_list">
        
            <thead class='thead-dark'>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Groupname</th>
                <th scope="col">Project Name</th>
                <th scope="col">Domain</th>
                <th scope="col">Status</th>
                <th scope="col">Mentor</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>

        </table>
    </div>
</div>

</div>

<script src="js/projects.js"></script>
<script>
    display_projects('<?php echo $status; ?>');
</script>