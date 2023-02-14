<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class BlogController extends Controller
{
    public function AllBlogCategory(){
       $blogcategories =  BlogCategory::latest()->get();
       return view('backend.blog.blogcategory_all',compact('blogcategories'));
    }//End Method

    public function AdminAddBlogCategory(){
        return view('backend.blog.add_blog_category');
    }//End Method

    public function AdminStoreBlogCategory(Request $request){
        BlogCategory::insert([
            'blog_category_name' => $request->blog_category_name,
            'blog_category_slug' => strtolower(str_replace(' ','-',$request->blog_category_name)),
            'created_at'=>Carbon::now(),

        ]);
        $notification = array('message'=>'Blog Category Added successfully','alert-type'=>'success');
        return redirect()->route('admin.blog.category')->with($notification);

    }//End Method 

    public function AdminEditBlogCategory($id){
        $blogcategory = BlogCategory::findOrFail($id);
        return view('backend.blog.edit_blog_category',compact('blogcategory'));

    }//End Method

    public function AdminUpdateBlogCategory(Request $request){

        $blog_category_id = $request->id;
        BlogCategory::findOrFail($blog_category_id)->update([
                'blog_category_name' => $request->blog_category_name,
                'blog_category_slug' => strtolower(str_replace(' ','-',$request->blog_category_name)),
            ]);
            $notification = array('message'=>'Blog Category Updated successfully','alert-type'=>'success');
            return redirect()->route('admin.blog.category')->with($notification); 
    }//End Method

    public function AdminDeleteBlogCategory($id){

        $blogcategory = BlogCategory::findOrFail($id);
        BlogCategory::findOrFail($id)->delete();
        $notification = array('message'=>'Blog Category Deleted successfully','alert-type'=>'success');
        return redirect()->route('admin.blog.category')->with($notification);


    }//End Method

        ///// Blog Post Method//////

        public function AllBlogPost(){
            $blogs =  Blog::latest()->get();
            return view('backend.post.blogpost_all',compact('blogs'));
        }//End Method

        public function AdminAddBlogPost(){
            $blogcategories =  BlogCategory::latest()->get();
            return view('backend.post.blogpost_add',compact('blogcategories'));
        }//End Method

        public function AdminStoreBlogPost(Request $request){
            $image = $request->file('post_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/blog/'.$name_gen);
        $save_url = 'upload/blog/'.$name_gen;

        Blog::insert([
            'category_id' => $request->blog_category_name,
            'post_title' => $request->post_title,
            'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
            'post_image'=> $save_url,
            'post_short_description'=> $request->post_short_descp,
            'post_long_description'=> $request->post_long_descp,
            'created_at'=> Carbon::now(),

        ]);
        $notification = array('message'=>'Post Added successfully','alert-type'=>'success');
        return redirect()->route('admin.blog.post')->with($notification);
        }//End Method


        public function AdminEditBlogPost($id){
            $blogs = Blog::findOrFail($id);
            $blogcategories =  BlogCategory::latest()->get();
            return view('backend.post.blogpost_edit',compact('blogs','blogcategories'));
    
        }//End Method
    
        public function AdminUpdateBlogPost(Request $request){
    
            $category_id = $request->id;
            $old_image = $request->old_image;
            
            if(!empty($request->file('post_image'))){
                $image = $request->file('post_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('upload/blog/'.$name_gen);
                $save_url = 'upload/blog/'.$name_gen;
    
                if(file_exists($old_image)){
                    unlink($old_image);
                }
    
                Blog::findOrFail($category_id)->update([
                    'category_id' => $request->blog_category_name,
                    'post_title' => $request->post_title,
                    'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
                    'post_image'=> $save_url,
                    'post_short_description'=> $request->post_short_descp,
                    'post_long_description'=> $request->post_long_descp,
                    'updated_at'=> Carbon::now(),
                ]);
                $notification = array('message'=>'Post Updated with Image successfully','alert-type'=>'success');
                return redirect()->route('admin.blog.post')->with($notification);
    
            } else {
    
                Blog::findOrFail($category_id)->update([
                    'category_id' => $request->blog_category_name,
                    'post_title' => $request->post_title,
                    'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
                    'post_short_description'=> $request->post_short_descp,
                    'post_long_description'=> $request->post_long_descp,
                    'updated_at'=> Carbon::now(),
    
                ]);
                $notification = array('message'=>'Post Updated without Image successfully','alert-type'=>'success');
                return redirect()->route('admin.blog.post')->with($notification);
            }
    
    }//End Method

    public function AdminDeleteBlogPost($id){

        $blog = Blog::findOrFail($id);
        $img = $blog->post_image;
        unlink($img);
    
        Blog::findOrFail($id)->delete();
        $notification = array('message'=>'Blog Deleted successfully','alert-type'=>'success');
        return redirect()->route('admin.blog.post')->with($notification);
    
    
    }//End Method


    ///Frontend Blog///

    public function AllBlog(){

        $blogcategories =  BlogCategory::latest()->get();
        $blogs =  Blog::latest()->get();
        return view('frontend.blog.home_blog',compact('blogcategories','blogs'));
    }//End Method


    public function BlogDetails($id,$slug){
        $blogcategories =  BlogCategory::latest()->get();
        $blogdetails =  Blog::findOrFail($id);
        $breadcat = BlogCategory::where('id',$blogdetails->category_id)->get();
        return view('frontend.blog.blog_details',compact('blogcategories','blogdetails','breadcat'));
    }//End Method
    

    public function BlogPostCategory($id,$slug){
        $blogcategories =  BlogCategory::latest()->get();
        $blogpost =  Blog::where('category_id',$id)->get();
        $breadcat = BlogCategory::where('id',$id)->get();
        return view('frontend.blog.category_post',compact('blogcategories','blogpost','breadcat'));
    }//End Method
}
