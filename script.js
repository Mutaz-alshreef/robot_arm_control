const sliders = [...Array(6)].map((_, i) => document.getElementById(`motor${i+1}`));
const values = [...Array(6)].map((_, i) => document.getElementById(`val${i+1}`));

sliders.forEach((slider, i) => {
    slider.addEventListener('input', () => {
        values[i].textContent = slider.value;
    });
});

function resetSliders() {
    sliders.forEach((slider, i) => {
        slider.value = 90;
        values[i].textContent = 90;
    });
}

function savePose() {
    const pose = sliders.map(s => s.value);
    fetch('save_pose.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ motors: pose })
    }).then(() => location.reload());
}

function runPose() {
    fetch('update_status.php', {
        method: 'POST'
    }).then(() => alert('Running pose...'));
}