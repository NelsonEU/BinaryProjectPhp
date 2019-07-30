<div class="tournamentsPage">
    <div class="container-fluid tournamentsContainer">
        <div class="confirmDiv">
            <h3>Confirmation</h3>
            <p>Are you sure to take part in this competition ?</p>
            <p class="align-right">Once registered, you won't be able to back out.</br>The bid amount will be credited from your account at the beginning of the tournament.</p></br>
            <div class="containerDetails">
                <div class="row rowDetails">
                    <div class="col-6 col-md-12 colDetails">
                        <p class="bidP">Bid: 50</p>
                    </div>
                    <div class="col-6 col-md-12 colDetails">
                        <p class="startingTimeP">Starting time: Today at 1:00pm</p>
                    </div>
                </div>
            </div>
            <div class="container containerButtonPopUp">
                <div class="row containerButtonRow">
                    <div class="col-6 containerButtonCol">
                        <button class="btn btn-danger" id="btnCancelPopUp">Cancel</button>
                    </div>
                    <div class="col-6 containerButtonCol">
                        <button class="btn btn-success" id="btnConfirmPopUp">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row tabTournamentsRow">
            <div class="col-12">
                <div class="tournamentsBox bg-dark">
                    <h1 class="tournamentsTitle">Tournaments</h1>
                    <!--                    <hr class="my-4 separator separatorTournament">-->
                    <div class="table table-responsive">
                        <table class="table-tournaments table-striped table-dark table-hover">
                            <thead>
                            <tr>
                                <th class="partyCell">Party</th>
                                <th class="durationCell">Duration</th>
                                <th class="bidCell">Bid</th>
                                <th class="joinCell"></th>
                            </tr>
                            </thead>
                            <tbody class="table-body-tournaments">
                            <?php
                                foreach(unserialize($_SESSION['tournaments']) as $tournamentNb => $tournament){
                                    echo "<tr class='tournamentRow' id='". $tournamentNb . "'>
                                            <td class='partyCell'><p>0</p></td>
                                            <td class=durationCell'><p>". $tournament->getStartingDate() ."</p></td>
                                            <td class='bidCell'><p>" . $tournament->getBid() . "</p></td>
                                            <td class='joinCell'>";
                                    if(count(unserialize($_SESSION['activeTournaments'])) > 0){
                                        $founded = false;
                                        foreach (unserialize($_SESSION['activeTournaments']) as $actNb => $active){
                                            if($active->getTournamentId() == $tournament->getTournamentId()){
                                                $founded = true;
                                                echo "<img class='checkedTableImg' src='Views/Assets/images/checked.png'></td></tr>";
                                                break;
                                            }
                                        }
                                        if(!$founded){
                                            echo "<button class='joinButton btn' onclick='onJoinClick()'>Join</button></td></tr>";
                                        }
                                    }else{
                                        echo "<button class='joinButton btn' onclick='onJoinClick()'>Join</button></td></tr>";
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 text-light tournamentExplain">
                <div class="rulesBox">
                    <h3>Rules</h3>
                    <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p><p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-light tournamentExplain">
                <div class="priceBox">
                    <h3>Price pool</h3>
                    <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p><p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
                </div>
            </div>
        </div>
    </div>
</div>