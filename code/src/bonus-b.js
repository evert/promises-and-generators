const operation = async function() {

    await dbQuery1();
    await dbQuery2();

    dbQuery3(); 

    return true;

};

operation();
