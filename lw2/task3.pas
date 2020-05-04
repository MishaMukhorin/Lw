PROGRAM Getting(INPUT, OUTPUT);
USES DOS;
VAR
  Name, S: STRING;
  Count: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  S := GetEnv('QUERY_STRING');

  IF Pos('name=', S) = 1
  THEN
    BEGIN
      IF Pos('&', S) > 0
      THEN
        Count := INTEGER(Pos('&', S)) - 6
      ELSE
        Count := Length(S) - 5;
      Name := Copy(S, 6, Count)
    END
  ELSE
    Name := 'Anonymous';
  WRITELN('Hello ', Name, '!')
END.
