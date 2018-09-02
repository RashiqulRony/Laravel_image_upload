  <?php
  if($request->hasFile('image')) {
        if ($user->image){
            unlink(public_path('/image/user/').$user->image);
        }
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $fileName = time() . "_profile_". "_" . $imageName;

        $directory = public_path('/image/user/');
        $imageUrl = $directory.$fileName;
        Image::make($image)->resize(200, 200)->save($imageUrl);
        $user->image = $fileName;
    }
