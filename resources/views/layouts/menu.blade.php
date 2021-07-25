<li class="nav-item">
    <a href="{{ route('classes.index') }}"
       class="nav-link {{ Request::is('classes*') ? 'active' : '' }}">
        <i class="fas fa-book"></i>
        <p>Turmas</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('classrooms.index') }}"
       class="nav-link {{ Request::is('classrooms*') ? 'active' : '' }}">
        <i class="fas fa-chalkboard"></i>
        <p>Salas de Aula</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('teachers.index') }}"
       class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}">
        <i class="fas fa-chalkboard-teacher"></i>
        <p>Professores</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('students.index') }}"
       class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
        <i class="fas fa-book-reader"></i>
        <p>Alunos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('employees.index') }}"
       class="nav-link {{ Request::is('employees*') ? 'active' : '' }}">
        <i class="fas fa-user-tie"></i>
        <p>Funcionários</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('equipment.index') }}"
       class="nav-link {{ Request::is('equipment*') ? 'active' : '' }}">
        <i class="fas fa-tv"></i>
        <p>Equipamentos</p>
    </a>
</li>


