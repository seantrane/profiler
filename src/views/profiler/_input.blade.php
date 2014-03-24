<?php $input = array('Input'=>Input::all(),'POST'=>$_POST,'GET'=>$_GET) ?>

@if(!empty($input))
	<table>
		<tr>
			<th>Key</th>
			<th>Value</th>
		</tr>
		@foreach($input as $key => $value)
			<tr>
				<td>{{ $key }}</td>
				<td>
					@if (is_array($value) || is_object($value))
						<pre>{{ print_r($value, true) }}</pre>
					@else
						{{ $value }}
					@endif
				</td>
			</tr>
		@endforeach
	</table>
@else
	<span class="anbu-empty">There are no input entries.</span>
@endif
