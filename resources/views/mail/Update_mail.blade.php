
{{-- mail subject details--}}

@if($customers->status ==='Approved')
<p>Your booking is approved by admin</p>
@elseif($customers->status==='Ready to delevary')
<p>Your booking is Ready to delevary</p>
@elseif($customers->status==='completed')
<p>Your service comleted</p>
@endif