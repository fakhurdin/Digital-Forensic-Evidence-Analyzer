function showSection(sectionName) {
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        section.style.display = 'none';
        section.classList.remove('active');
    });

    const targetSection = document.getElementById(sectionName);
    if (targetSection) {
        targetSection.style.display = 'block';
        targetSection.classList.add('active');
        targetSection.style.opacity = '0';
        targetSection.style.transform = 'translateY(20px)';

        setTimeout(() => {
            targetSection.style.transition = 'all 0.5s ease';
            targetSection.style.opacity = '1';
            targetSection.style.transform = 'translateY(0)';
        }, 10);
    }

    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => link.style.background = 'none');

    const activeLink = document.querySelector(`[onclick="showSection('${sectionName}')"]`);
    if (activeLink) {
        activeLink.style.background = 'rgba(0, 212, 255, 0.2)';
    }
}

function closeModal(id) {
    const modal = document.getElementById(id);
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
}

function openModal(id) {
    const modal = document.getElementById(id);
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function createParticles() {
    const container = document.getElementById('particles');
    if (!container) return;
    const count = 50;

    for (let i = 0; i < count; i++) {
        const p = document.createElement('div');
        p.className = 'particle';
        p.style.left = Math.random() * 100 + '%';
        p.style.top = Math.random() * 100 + '%';
        p.style.animationDelay = Math.random() * 6 + 's';
        p.style.animationDuration = (Math.random() * 3 + 3) + 's';
        container.appendChild(p);
    }
}

function showNotification(message, type = 'info') {
    const note = document.createElement('div');
    note.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        background: ${type === 'success' ? 'rgba(0, 255, 136, 0.1)' : 'rgba(0, 212, 255, 0.1)'};
        border: 1px solid ${type === 'success' ? '#00ff88' : '#00d4ff'};
        border-radius: 8px;
        padding: 1rem;
        color: white;
        z-index: 3000;
        transform: translateX(400px);
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        max-width: 300px;
    `;

    note.innerHTML = `
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <div style="font-size: 1.2rem;">${type === 'success' ? '✅' : 'ℹ️'}</div>
            <div>${message}</div>
        </div>
    `;
    document.body.appendChild(note);
    setTimeout(() => note.style.transform = 'translateX(0)', 10);
    setTimeout(() => {
        note.style.transform = 'translateX(400px)';
        setTimeout(() => document.body.removeChild(note), 300);
    }, 5000);
}

document.addEventListener('DOMContentLoaded', () => {
    createParticles();
    showSection('home');

    setTimeout(() => {
        showSection('dashboard');
        showNotification('New evidence uploaded successfully', 'success');
    }, 2000);

    setTimeout(() => {
        showNotification('Analysis completed for Case_2024_001', 'info');
    }, 5000);
});

document.addEventListener('click', (e) => {
    if (e.target.classList.contains('modal')) {
        e.target.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
});
