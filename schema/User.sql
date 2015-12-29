DROP   TABLE IF     EXISTS models_user;
CREATE TABLE IF NOT EXISTS models_user (
  id    INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  email TEXT    NOT NULL,
  pass  TEXT    NOT NULL,
  pid   INTEGER,

  FOREIGN KEY(pid) REFERENCES models_pubkey(id)
);
