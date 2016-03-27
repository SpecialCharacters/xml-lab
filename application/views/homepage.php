<div class="row" id="table">
    <div class="col-md-6">
        <h3>Days</h3>
	{days}
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">{weekday}</div>
            <table class="table">
                <tr>
                    <th>Type</th>
                    <th>Course</th>
		    <th>Day</th>
                    <th>Time</th>
                    <th>Instructor</th>
		    <th>Room</th>
                </tr>
		{bookings}
                <tr>
                    <td>{type}</td>
                    <td>{courseNumber}</td>
                    <td>{weekday}</td>
                    <td>{time}</td>
                    <td>{instructor}</td>
		    <td>{room}</td>
                </tr>
		{/bookings}
            </table>
        </div>
	{/days}
    </div>
    <div class="col-md-6">
        <h3>Periods</h3>
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">//</div>

            <table class="table">
                <tr>
                    <th>Day</th>
                    <th>Course</th>
                    <th>Type</th>
                    <th>Building</th>
                    <th>Room</th>
                    <th>Instructor</th>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <h3>Courses</h3>
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">//</div>

            <table class="table">
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Type</th>
                    <th>Building</th>
                    <th>Room</th>
                    <th>Instructor</th>
                </tr>
            </table>
        </div>
    </div>
</div>