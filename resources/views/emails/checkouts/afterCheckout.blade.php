@component('mail::message')
# Introduction

Hi, {{$checkout->User->name}}
<br>
Thank you for register on {{$checkout->Camp->title}}. Now, see payment instruction by clicking the button bellow

@component('mail::button', ['url' => route('dashboard.checkout.invoice', $checkout->id)])
Pay Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
