<?php


	if ($request->hasFile('avatar'))
	{
        $file = $request->file('avatar');
        $name = time() . '_student_' . $file->getClientOriginalName();
        $file->move('avatar/', $name);
        $student->avatar = $name;
    }	


