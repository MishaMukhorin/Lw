PROGRAM SarahRevere(INPUT,OUTPUT);
USES DOS;
VAR
  Lanterns: STRING;
BEGIN {SarahRevere}
  {Read Lanterns}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Lanterns := GetEnv('QUERY_STRING');

  IF Lanterns <> ''
  THEN
    IF Lanterns[10] < '3'
    THEN
      WRITE('The British are coming by ');
  IF Lanterns[10] = '1'
  THEN
    WRITELN('land.')
  ELSE
    IF Lanterns[10] = '2'
    THEN
      WRITELN('sea.')
    ELSE
      WRITELN('The North Church shows ''', Lanterns[10], '''.')
END. {SarahRevere}
