<x-mail::message>
An email from {{ $full_name }} has been received.

E-mail: ({{ $email_address }}) 
Phone: ({{ $phone_number }}) 

Subject: {{ $email_subject }}
--------------------------------------------------
Message: {{ $message_details }}

{{-- <x-mail::button :url="''"> 
Button Text
</x-mail::button>
--}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
