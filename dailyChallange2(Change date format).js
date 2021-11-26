function formatChange(value) {
    let splitDate = value.slice(0,2);
    let splitMonth = value.slice(3,5);
    let splityear = value.slice(6,10);
    let finalDate = splityear+splitDate+splitMonth;
    console.log(finalDate);
    return finalDate;
    // YYYYMMDD
}
formatChange('12/31/2014');
