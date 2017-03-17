func operation() bool {

	dbQuery1();
	dbQuery2();

	go dbQuery3();

	return true

}

operation();
