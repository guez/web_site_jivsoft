<br>
<p>
    Hola {{ $data['user'] }}.
</p>

<p>
    JIVSoft un cliente nuevo nos contactó, su nombre es "{{ $data['name'] }}".
</p>
<p>
    @isset($data['enterprise'])
        Pertenece a la empresa <b>"{{ $data['enterprise'] }}"</b>
    @endisset
</p>
<br>
<p>
    Subject: <b>{{ $data['subject'] }}</b>
</p>
<br>
<p>
    Mensaje: <b>{{ $data['message'] }}</b>
</p>
<br>
<hr>
<p>
    Contactos: 
    <ul>
        <li>
            Teléfono: {{ $data['phone'] }}
        </li>
        <li>
            Email: {{ $data['email'] }}
        </li>
    </ul>
</p>
<br>
<br>
<p>
    Att:
</p>
<p>
    JIVSoft Enterprise.
</p>