<nav class="navbar">
  <a href="{{ url('/') }}" class="brand">SMS</a>
  <span class="menu-toggle" id="menu-toggle">&#9776;</span>
  <ul id="navbar-menu">
    <li><a href="{{ url('/home') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
    <li><a href="{{ url('/student/create') }}" class="{{ request()->is('student/create') ? 'active' : '' }}">Add Student</a></li>
    <li><a href="{{ url('/student') }}" class="{{ request()->is('student') ? 'active' : '' }}">Student List</a></li>
    <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
  </ul>
</nav>

@push('scripts')
<script>
  // Mobile menu toggle
  const menuToggle = document.getElementById('menu-toggle');
  const navbarMenu = document.getElementById('navbar-menu');

  menuToggle.addEventListener('click', () => {
    navbarMenu.classList.toggle('show');
  });
</script>
@endpush
