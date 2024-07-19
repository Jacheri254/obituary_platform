document.getElementById('obituaryForm').addEventListener('submit', function(event) {
    var name = document.getElementById('name').value;
    var dateOfBirth = document.getElementById('date_of_birth').value;
    var dateOfDeath = document.getElementById('date_of_death').value;
    var content = document.getElementById('content').value;
    var author = document.getElementById('author').value;

    if (!name || !dateOfBirth || !dateOfDeath || !content || !author) {
        alert('Please fill out all fields.');
        event.preventDefault();
    }
});
document.querySelector('.btn').addEventListener('click', function(){
    console.log(clocked);
})