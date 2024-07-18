// AJAX Request
/*$('#searchInput').on('input', function() {
    var query = $(this).val();

    $.ajax({
        url: '/search',
        type: 'GET',
        data: { query: query },
        success: function(response) {
            // Update the UI with the response
            $('#searchResults').html(response);
        },
        error: function(xhr) {
            console.log(xhr.responseText);
        }
    });
});
*/

function EnableHidden(answer) {
    console.log(answer.value);
    if(answer.value == "CS") {
        document.getElementById('CS').classList.remove('hidden');
        document.getElementById('Mngmt').classList.add('hidden');
        document.getElementById('DS').classList.add('hidden');
    } else if(answer.value == "Mngmt") {
        document.getElementById('Mngmt').classList.remove('hidden');
        document.getElementById('CS').classList.add('hidden');
        document.getElementById('DS').classList.add('hidden');
    } else if(answer.value == "DS") {
        document.getElementById('DS').classList.remove('hidden');
        document.getElementById('CS').classList.add('hidden');
        document.getElementById('Mngmt').classList.add('hidden');
    } else {
        document.getElementById('CS').classList.add('hidden');
        document.getElementById('Mngmt').classList.add('hidden');
        document.getElementById('DS').classList.add('hidden');
    }
};