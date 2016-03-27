<div id ="results">
    {bingo}
</div>
<div class="row" id="table">
    <div class="col-md-12">
        <h3>Days</h3>
        <div class="panel panel-primary">
            <!-- Default panel contents -->            
            <table class="table">
                <tr>
                    <th>Day</th>
                    <th>Course</th>
		    <th>Type</th>
                    <th>Time</th>
                    <th>Instructor</th>
		    <th>Room</th>
                </tr>
		{days}
                <tr>
                    <td>{weekday}</td>
                    <td>{courseNumber}</td>
                    <td>{type}</td>
                    <td>{time}</td>
                    <td>{instructor}</td>
		    <td>{room}</td>
                </tr>
		{/days}
            </table>
        </div>
    </div>
    <div class="col-md-12">
        <h3>Periods</h3>
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading"></div>
            <table class="table">
                <tr>
                    <th>Day</th>
                    <th>Course</th>
		    <th>Type</th>
                    <th>Time</th>
                    <th>Instructor</th>
		    <th>Room</th>
                </tr>
		{periods}
                <tr>
                    <td>{weekday}</td>
                    <td>{courseNumber}</td>
                    <td>{type}</td>
                    <td>{time}</td>
                    <td>{instructor}</td>
		    <td>{room}</td>
                </tr>		
		{/periods}
            </table>
        </div>
    </div>
    <div class="col-md-12">
        <h3>Courses</h3>
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading"></div>
            <table class="table">
                <tr>
                    <th>Day</th>
                    <th>Course</th>
		    <th>Weekday</th>
                    <th>Time</th>
                    <th>Instructor</th>
		    <th>Room</th>
                </tr>
		{courses}
                <tr>
                    <td>{weekday}</td>
                    <td>{courseNumber}</td>
                    <td>{type}</td>
                    <td>{time}</td>
                    <td>{instructor}</td>
		    <td>{room}</td>
                </tr>
		{/courses}
            </table>
        </div>
    </div>
</div>