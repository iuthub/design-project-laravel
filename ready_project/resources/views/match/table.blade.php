<!-- table coloumn starts here -->

<div class="second_bar_content_1_table">
<table>
                        @foreach($match as $score)
                            <tr>

                                <th><span class="tright">{{$score->first_team}}</span></th>
                                <th><span class="bgred">{{$score->first_score}}-{{$score->second_score}}</span></th>
                                <th><span class="tleft">{{$score->second_team}}</span></th>

                            </tr>
                        @endforeach

                    </table>

                </div>

