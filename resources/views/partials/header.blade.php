<!-- header -->
<header class="active">
    <a href="{{ route('home') }}" class="logo">Mo. Diaa</a>

    <i class='bx bx-menu' id="menu-icon"></i>

    <nav id="main-nav">
        <a href="{{ route('home') }}" class="active">Home</a>
        <a>Services</a>
        <a>Resume</a>
        <a>Portfolio</a>
        <a>Contact</a>
    </nav>
</header>

<!-- bars background -->
<div class="bars-box active">
    <div class="bar" style="--i:6;"></div>
    <div class="bar" style="--i:5;"></div>
    <div class="bar" style="--i:4;"></div>
    <div class="bar" style="--i:3;"></div>
    <div class="bar" style="--i:2;"></div>
    <div class="bar" style="--i:1;"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const nav = document.querySelector('#main-nav');
        if (nav) {
            const downloadCvLink = document.createElement('a');
            downloadCvLink.id = 'header-download-cv';
            downloadCvLink.target = '_blank';
            downloadCvLink.href = "{{ route('download.cv') }}";
            downloadCvLink.className = 'btn';
            downloadCvLink.textContent = 'Download CV';
            nav.appendChild(downloadCvLink);
        }
    });
</script>