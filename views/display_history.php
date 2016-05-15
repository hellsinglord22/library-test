
<style>
    
    #middle
    {
        border:1px solid black;
        margin: 50px;
    }
    
    
    h1
    {
        text-align: center;
        text-decoration: underline;
        margin-bottom: 30px;
    }
    body
    {
        
    }
    
</style>

<div id="middle">
    <table class="table table-striped">
        <h1>Exams History</h1>
        <thead>
            <tr>
                <th>User</th>
                <th>Module</th>
                <th>Degree</th>
                <th>Date</th>
            </tr>
        </thead>
        
        <tbody>
                            
            <!--Check if its not empty -->
            <?php
                if(!empty($positions))
                {
                    foreach ($positions as $position)
                    {
                        // print tabel information 

                        
                        print("<tr>");
                        
                        // get the user // 
                        $queryResult = CS50::query("SELECT username FROM users WHERE id = ?", $position['user_id']); 
                        
                        if ($queryResult != 0)
                        {
                            $username = $queryResult[0]['username']; 
                            
                            print("<td>" . $username . "</td>");
                            print("<td>" . "module " . $position["module"]   . "</td>"); 
                            print("<td>" . $position["degree"] . "%" . "</td>");
                            print("<td>" . $position["date"]  . "</td>"); 
                            print("</tr>");
                        }
                    }
                }
               
            ?>
        </tbody>

    </table>
</div>
