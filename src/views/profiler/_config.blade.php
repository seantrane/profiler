@if(!empty($config))
	<table>
		<tr>
			<th>Key</th>
			<th>Value</th>
		</tr>
		@foreach($config as $key => $value)
			<tr>
				<td>{{ $key }}</td>
				<td>
					@if (is_array($value))
						<pre>{{ print_r($value, true) }}</pre>
					@elseif (isset($value) and empty($value) and !is_bool($value))
						{{ $value }}
					@elseif (is_bool($value))
						{{ ($value)?'true':'false' }}
					@elseif (is_object($value) and !method_exists($value, '__toString'))
						<pre>{{ print_r($value, true) }}</pre>
					@elseif (is_object($value) and method_exists($value, '__toString'))
						{{ $value }}
					@elseif (is_object($value) and !empty($value))
						{{ get_class($value) }}
					@else
						{{ $value }}
					@endif
				</td>
			</tr>
		@endforeach
	</table>
@else
	<span class="anbu-empty">There are no config entries.</span>
@endif
