<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;

// $table->String('ticket_no');
// $table->String('title');
// $table->String('categry');
// $table->String('status');
class TicketController extends Controller
{
   public function index(){
       $tikets = Ticket::all();
       return view('new_ticket_',compact('tickets'));
   }
   public function create(){
    return view('new_ticket');
}

   public function store(Request $request){
       $request->validate([
           'ticket_no'=>'required',
           'title'=>'required',
           'categry'=>'required',
           'status'=>'required',
       ]);
        $ticket = new Ticket();

        $ticket ->ticket_no = $request->ticket_no;
        $ticket ->title = $request->title;
        $ticket ->categry = $request->categry;
        $ticket ->status= $request->status;
        $ticket ->save();

        return redirect()->back();

   }

   public function edit(Ticket $ticket){
    // $contact = Co ntact::findOrFail($id);
    return view('my_ticket', compact('ticket'));
   }

   public function update(Request $request, Ticket $ticket){
    $request->validate([
           'ticket_no'=>'required',
           'title'=>'required',
           'categry'=>'required',
           'status'=>'required',
    ]);

    // $contact = Contact::findOrFail($id);

    $ticket ->ticket_no = $request->ticket_no;
    $ticket ->title = $request->title;
    $ticket ->categry = $request->categry;
    $ticket ->status= $request->status;

        $ticket->save();

        return redirect('/ticket');
   }

   public function destroy($id){

    $task=Ticket::find($id);
    $task->delete();

    return redirect()->back();
}
}
