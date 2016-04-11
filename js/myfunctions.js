/**
 * Gets values of checked lines of the table, then deletes the lines by ajax method
 * @returns {boolean}
 */
function getCheckedValues(){
    var checkedValue;
    checkedValue = [];

    var k = 0;
    var leschecked = document.getElementsByClassName('check_del');
    for (var i =0; i < leschecked.length; ++i){
        if (leschecked[i].checked){

            checkedValue[k] = leschecked[i].value;
            ++k;

        }
    }

    actionParam(document.getElementById('class_name').innerHTML + '/delete/0', checkedValue.join());

    return true;
}