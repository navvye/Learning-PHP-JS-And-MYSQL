PREPARE statement FROM "INSERT INTO chessData VALUES(?,?,?,?,?)";

SET @san   = "e4",
    @fen   = "rnbqkbnr/pppppppp/8/8/8/8/PPPPP3/RNBQKBNR w KQkq -",
    @gameId = "88",
    @color     = "w",
    @piece    = "p";

EXECUTE statement USING @author,@title,@category,@year,@isbn;
DEALLOCATE PREPARE statement;
