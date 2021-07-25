<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Edit behaviour -->
@if(isset($user))
    <!-- Keep Password -->
    <div class="form-group col-sm-12">
        <label class="checkbox">
            <div class="row">
                <div class="col">
                    <p style="font-weight:bold">Manter Senha?</p>
                </div>
                <div class="col">
                    {!! Form::checkbox('keep_password', 1, 1, ['class' => 'field', 'id' => 'keep_password', 'onChange' => 'valueChanged()']) !!}
                </div>
            </div>
        </label>
    </div>

    <!-- Hide if keep password is selected -->
    <div class="hide-field col-sm-12" style="display:none">
        <div class="row">
            <!-- Password Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('password', 'Senha:') !!}
                <input type="password" class="form-control" name="password">
            </div>

            <!-- Password Confirmation Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('password', 'Confirme sua Senha:') !!}
                <input type="password" name="password_confirmation" class="form-control">
            </div>
        </div>
    </div>
<!-- Create behaviour -->
@else
    <!-- Password Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('password', 'Senha:') !!}
        <input type="password" class="form-control" name="password">
    </div>

    <!-- Password Confirmation Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('password', 'Confirme sua Senha:') !!}
        <input type="password" name="password_confirmation" class="form-control">
    </div>
@endif

<!-- Scripts -->
@push('page_scripts')
    <script type="text/javascript">
        // Keep password
        function valueChanged() {
            if ($('#keep_password').is(':checked')) {
                $(".hide-field").hide();
            } else {
                $(".hide-field").show();
            }
        }
        document.getElementById("keep_password").checked = true;
    </script>
@endpush
