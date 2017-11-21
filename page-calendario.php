<?php get_header() ?>
<div class="page_header">
	<div class="container">
		<div class="row">
		<div class="col-sm-6">
			<p>Subdireción local de Tunjuelito</p>
			<h4>Calendario de eventos</h4>
		</div>
		
		<div class="col-sm-6">
			<div class="breadcrumbs">
				<?php breadcrumbs(); ?>
			</div>
		</div>
		</div>
	</div>
</div>

<div class="inner-content">
	<div class="container">
	
		<div class="calendar">
			<div class="group">
				<small>JUNE 2017</small>
				<div class="may-2016 hidden-xs">
					<span><a href="#">Previous</a></span>
					<span> &nbsp; | &nbsp; </span>
					<span><a href="#">Next</a></span>
				</div>
				<span>
				<a href="#" class="day">
					Day
				</a>
				<a href="#" class="week active">
					Week
				</a>
				<a href="#" class="month">
					Month
				</a>
				<span>
				<div class="search-bar">
					<input type="text" placeholder="Search Event">
					<button type="submit"><i class="fa fa-search"></i></button>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="main-calendar">
			<div class="calendar-inner">
			<ul class="weeks-name">
				<li>Mon</li>
				<li>Tue</li>
				<li>Wed</li>
				<li>THU</li>
				<li>FRI</li>
				<li>SAT</li>
				<li>Sun</li>
			</ul>
			
			<ul class="days">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><span>1</span></li>
				<li><span>2</span></li>
				<li><span>3</span></li>
			</ul>
			
			<ul class="days">
				<li><span>4</span></li>
				<li><span>5</span></li>
				<li><span>6</span></li>
				<li><span>7</span></li>
				<li class="events-date bg-primary">
					<span>8</span>
					<div class="event-group">
						<p><b>Fri 10PM to 12 PM</b>Permission to or Awareness</p>
						<p><b>Fri 2 AM to 5 AM</b>Big London Night Walk</p>
					</div>
				</li>
				<li class="events-date bg-primary2">
					<span>9</span>
					<div class="event-group">
						<p><b>Sat 10PM to 12 PM</b>London to Paris Cycle Challenge</p>
					</div>							
				</li>
				<li class="events-date bg-primary">
					<span>10</span>
					<div class="event-group">
						<p><b>Sat 10PM to 12 PM</b>Trek the Great Wall of China</p>
					</div>
				</li>
			</ul>
			
			<ul class="days">
				<li><span>11</span></li>
				<li><span>12</span></li>
				<li><span>13</span></li>
				<li><span>14</span></li>
				<li><span>15</span></li>
				<li><span>16</span></li>
				<li><span>17</span></li>
			</ul>

			<ul class="days">
				<li><span>18</span></li>
				<li><span>19</span></li>
				<li><span>20</span></li>
				<li class="events-date bg-primary">
					<span>21</span>
					<div class="event-group">
						<p><b>Fri 10PM to 12 PM</b>Permission to or Awareness</p>
					</div>
				</li>				
				<li><span>22</span></li>
				<li><span>23</span></li>
				<li><span>24</span></li>
			</ul>			
			
			<ul class="days">
				<li><span>25</span></li>
				<li><span>26</span></li>
				<li><span>27</span></li>
				<li><span>28</span></li>
				<li><span>29</span></li>
				<li><span>30</span></li>
				<li></li>
			</ul>			

			</div>
			</div>
			</div>
		</div>
	

	</div>
</div>
<?php get_footer() ?>