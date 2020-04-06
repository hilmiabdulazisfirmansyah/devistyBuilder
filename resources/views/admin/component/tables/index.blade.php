@switch($columns)
	@case('3')
	@include('admin.component.tables.3Columns',[
		'column1' 		=> 	$column1,
		'column2' 		=> 	$column2,
		'column3'		=> 	$column3,
		'tables' 		=> 	$tables, //foreach table
		'data1' 		=> 	$data1,  //data get to database
		'target_edit'	=>	$target_edit
	])
	@break

	@case('4')
	@include('admin.component.tables.4Columns')
	@break

	@case('5')
	@include('admin.component.tables.5Columns')
	@break

	@default
@endswitch
