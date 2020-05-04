PROGRAM Getting(INPUT, OUTPUT);
USES DOS;
FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  S, A: STRING;
  I: INTEGER;
BEGIN
  S := GetEnv('QUERY_STRING');
  A := '';
  IF Pos(Key, S) > 0
  THEN
    BEGIN
      I := Pos(Key, S) + Length(Key) + 1;
      WHILE (I < Length(S) + 1) AND (S[I] <> '&')
      DO
        BEGIN
          A := A + S[I];
          I := I + 1;
        END
    END
  ELSE
    A := 'there is no ' + Key;
  GetQueryStringParameter := A;
END;

BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))

END.
