var count = Cookies.get('noteCount');

$(document).ready(function() {
			if (typeof count == 'undefined') {
				$('#introModal').modal('show');
			} else {
				addNotes(count);
			}
			$('#addButton').click(function() {
				newNote();
			});
});

function addNotes(noteCount) {
	for (var i = 1; i <= noteCount; i++) {
		var note = JSON.parse(Cookies.get('note' + i));
		var noteHTML = '<div id="card m-3' + i + '" class="card"><div class="card-header">' + note.name + '</div><div class="card-body">' + note.body + '</div><div class="card-footer"><button class="btn btn-large btn-primary btn-block" data-id="' + i + '"><i class="fas fa-edit"></i> Edit Note</button></div></div>';
		$('#display').append(noteHTML);
	}
}

function newNote() {
	// make a cookie
	Cookies.set('note' + count, 0);
	count++;
}