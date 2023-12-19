<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketReply;
use Auth;
use Illuminate\Http\Request;

class SellerTicketController extends Controller
{
    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:view_all_support_tickets'])->only('admin_index');
          $this->middleware('check.admin')->only('admin_index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index(Request $request)
    {
         if (Auth::user()->user_type !== 'admin') {
            // Redirect to seller's dashboard or any other page
            return redirect()->route('seller.dashboard');
        }
        $sort_search = null;
        $tickets = Ticket::select('tickets.*', 'users.user_type')
            ->leftJoin('users', 'tickets.user_id', '=', 'users.id')
            ->orderBy('tickets.created_at', 'desc');

        if ($request->has('search')) {
            $sort_search = $request->search;
            $tickets = $tickets->where('tickets.code', 'like', '%' . $sort_search . '%');
        }

        // Filter by user_type (assuming 'customer' is the user_type you are looking for)
        $tickets = $tickets->where('users.user_type', 'seller');

        $tickets = $tickets->paginate(15);
        return view('backend.sellers.seller_support_tickets.index', compact('tickets', 'sort_search'));
    }

    public function admin_store(Request $request)
    {
        $ticket_reply = new TicketReply();
        $ticket_reply->ticket_id = $request->ticket_id;
        $ticket_reply->user_id = Auth::user()->id;
        $ticket_reply->reply = $request->reply;
        $ticket_reply->files = $request->attachments;
        $ticket_reply->ticket->client_viewed = 0;
        $ticket_reply->ticket->status = $request->status;
        $ticket_reply->ticket->save();

        if ($ticket_reply->save()) {
            flash(translate('Reply has been sent successfully'))->success();
            $this->send_support_reply_email_to_user($ticket_reply->ticket, $ticket_reply);
            return back();
        } else {
            flash(translate('Something went wrong'))->error();
        }
    }
    public function admin_show($id)
    {
        $ticket = Ticket::findOrFail(decrypt($id));
        $ticket->viewed = 1;
        $ticket->save();
        return view('backend.sellers.seller_support_tickets.show', compact('ticket'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
