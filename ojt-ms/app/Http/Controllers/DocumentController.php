<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Documents;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class DocumentController extends Controller
{

    //function to create new Document
    public function addDocument(Request $request) {
        $request->validate([
            'doc_name' => ['required', 'max:24', Rule::unique('documents', 'doc_name')],
            'mime_type' => 'required',
        ]);
        
        try {
            $document = new Documents();
            $document->doc_name = $request->doc_name;
            $document->mime_type = $request->mime_type;

            $extension = '';
            if ($request->mime_type === 'application/pdf') {
                $extension = '.pdf';
            } else {
                // Add more cases for other file types if needed
            }

            $docPath = 'public/files/' . str_replace(' ', '', strtolower($request->doc_name));
            // $docPath = 'public/files/' . $request->doc_name;
            $document->doc_path = $docPath;
            
            $document->save();

            // Return success JSON response
            return redirect()->back()->with('success', 'new STUDENT added successfully');
            // return response()->json(['success' => true, 'message' => 'Document added successfully'], 200);
        } catch (\Exception $e) {
            // Return error JSON response on failure
            return redirect()->back()->with('success', 'new STUDENT added successfully');
        }
    }

    public function deleteDocument($id) {
        try {
        $document = Documents::where('id', $id)->first();
        if (!$document) {
            return response()->json(['success' => false, 'error' => 'Document not found'], 404);
        }
        
        if ($document->delete()) {
            return response()->json(['success' => true, 'message' => 'Document has been deleted'], 200);
        }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => 'Something went wrong'], 500);
        }
    }


    //DataTables for Documents
    public function index() {
        if(\request()->ajax()){
            $documents = Documents::query();
            $students = Student::query();
            
            if (\request('data-table') === 'documents') {
                return DataTables::of($documents)
                    ->addIndexColumn()
                    ->addColumn('extension', function ($document) {
                        $extension = '.' . explode('/', $document->mime_type)[1];
                        return $extension;
                    })
                    ->addColumn('formatted_date', function ($document) {
                        return date('Y-m-d H:i:s', strtotime($document->created_at));
                    })
                    ->addColumn('action', function ($document) {
                        $editButton = '<a href="#" class="btn btn-sm btn-primary edit-document" data-id="' . $document->id . '">Edit</a>';
                        $deleteButton = '<button class="btn btn-sm btn-danger delete-document-btn" data-id="' . $document->id . '">Delete</button>';
                        return $editButton . ' ' . $deleteButton;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            if (\request('data-table') === 'students') {
                $requiredDocuments = Documents::pluck('doc_name')->toArray();

                return DataTables::of($students)
                    ->addIndexColumn()
                    ->addColumn('name', function ($student) {
                        return $student->user->last_name . ', ' . $student->user->first_name;
                    })
                    ->addColumn('has_document', function ($student) {
                        return $student->documents->isNotEmpty();
                    })
                    ->addColumn('has_documents', function ($student) use ($documents) {
                        $studentDocuments = $student->documents->pluck('id')->toArray();
                        $hasDocuments = [];
                        foreach ($documents as $document) {
                            $hasDocuments["document_{$document->id}"] = in_array($document->id, $studentDocuments);
                        }
                        return $hasDocuments;
                    })
                    ->addColumn('action', function ($student) use ($documents) {
                        $editButton = '<button class="btn btn-sm btn-primary update-student-doc-btn" data-id="' . $student->account_id . '">Update</button>';
                        return $editButton;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
        }
        $all_documents = Documents::all();
        $all_students = Student::all();
        return view('admin.documents', compact('all_documents', 'all_students'));
    }
}
