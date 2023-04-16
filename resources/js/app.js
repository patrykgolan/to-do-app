import './bootstrap';

window.submitFormMarkAsCompleted = id => {
    const form = document.getElementById(`mark_as_completed_${id}`)
    form.submit()
}


