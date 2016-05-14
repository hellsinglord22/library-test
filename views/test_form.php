<style>
    body
    {
        margin: 500px;
        margin-top: 50px;    
    }
</style>

<form action="create_test.php" method="POST" id="usrform">
    <fieldset>
        <div class="form-group">
            <textarea name="question" form="usrform" cols="55" placeholder="Enter a question" required></textarea>
        </div>
        <div class="form-group">
            <input autocomplete="off" id="answer" autofocus class="form-control" name="answer" placeholder="answer" type="text" required/>
        </div>
        <div class="form-group">
        </div>
        <div id="options">
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="option1" placeholder="option1" type="text" required/>
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="option2" placeholder="option2" type="text" required/>
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="option3" placeholder="option3" type="text" required/>
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="option4" placeholder="option4" type="text" required/>
            </div>
            <select name="module">
                <option value="6">Module 6</option>
                <option value="1">Module 1</option>
                <option value="2">Module 2</option>
                <option value="3">Module 3</option>
                <option value="4">Module 4</option>
                <option value="5">Module 5</option>
            </select>
        </div>
        <div class="form-group" id="type">
            <input type="radio" name="type" value="choice" checked="checked"> Choices<br>
            <input type="radio" name="type" value="R&W"> Right and wrong<br>
        </div>
        
        
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Add
            </button>
        </div>
    </fieldset>
</form>
