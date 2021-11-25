// N: input number
function changeToArray(N){
    let arr = []
    let n1 = N.toString();
    for(let i=0;i<n1.length;i++){
        arr.push(parseInt(n1[i]))
    }
    console.log(arr);
}
changeToArray(8754);
